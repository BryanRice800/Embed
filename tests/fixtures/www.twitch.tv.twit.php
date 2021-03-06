<?php
declare(strict_types = 1);

return [
    'authorName' => null,
    'authorUrl' => null,
    'cms' => null,
    'code' => [
        'html' => '<div id="twitch-embed"></div>
<script src="https://player.twitch.tv/js/embed/v1.js"></script>
<script type="text/javascript">
    new Twitch.Player("twitch-embed", { channel: "twit" });
</script>',
        'width' => 620,
        'height' => 378,
        'ratio' => 60.968
    ],
    'description' => 'Twitch is the world\'s leading video platform and community for gamers.',
    'favicon' => 'https://static.twitchcdn.net/assets/favicon-32-d6025c14e900565d6177.png',
    'feeds' => [],
    'icon' => null,
    'image' => 'https://static-cdn.jtvnw.net/ttv-static-metadata/twitch_logo3.jpg',
    'keywords' => [],
    'language' => null,
    'languages' => [],
    'license' => null,
    'providerName' => 'Twitch',
    'providerUrl' => 'https://www.twitch.tv',
    'publishedTime' => null,
    'redirect' => null,
    'title' => 'Twitch',
    'url' => 'https://www.twitch.tv/twit',
    'linkedData' => [],
    'oEmbed' => [
        'error' => 'Gone',
        'status' => 410,
        'message' => 'Endpoint deprecated'
    ]
];
