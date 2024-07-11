<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Application;
use Bitrix\Main\Loader;

Loader::includeModule('sender');

$request = Application::getInstance()->getContext()->getRequest();

$email = $request->getQuery('email');

if ($email) {

    $subscriptionDb = \Bitrix\Sender\MailingSubscriptionTable::getSubscriptionList(array(
        'select' => array('IS_UNSUB'),
        'filter' => array(
            '=CONTACT.CODE' => $email,
        ),
    ));

    while (($subscription = $subscriptionDb->fetch())) {
        $arResult['USER_IS_UNSUB'] = $subscription['IS_UNSUB'];
    }

    if ($_POST['UNSUBSCRIBE'] === 'UNSUBSCRIBE') {

        $contact_id = \Bitrix\Sender\ContactTable::addIfNotExist(
            array(
                'EMAIL' => $email
            )
        );
        $contact = new \Bitrix\Sender\Entity\Contact($contact_id);

        $subList = $contact->loadData($contact_id);
        $subList = $subList['SUB_LIST'];
        foreach ($subList as $item) {
            $contact->unsubscribe($item);
        }

        $arResult['USER_IS_UNSUB'] = 'Y';

    }

} else {
    LocalRedirect('/');
}

$this->IncludeComponentTemplate();
?>