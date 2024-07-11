# Форма отписки от всех рассылок Email-маркетинга
Битрикс компонент (форма), отписаться от всех подписок на рассылку (Email-маркетинг)

## Установка 

1. Скопируйте содержимое в папку local/components/web-say(никнейм_разработчика)/
2. На нужной странице, установите код:

<pre language="haskell"><code>
<![CDATA[<?php]]>
$APPLICATION->IncludeComponent( "web-say:unsubscribe.all.sender", "", [] );
?>
</code></pre>

