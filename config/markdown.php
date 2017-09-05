<?php

return [
    'parsedown' => [
        // enables automatic line breaks
        'breaksEnabled' => true,

        // escapes markup (HTML)
        'markupEscaped' => true,

        // enables automatic linking of URLs
        'urlsLinked' => true,
    ],

    'parsehtml' => [
        // strip HTML tags that don't have a Markdown equivalent while preserving the content inside them
        // '<span>Turnips!</span>';  => $markdown now contains "Turnips!"
        'strip_tags' => true,

        // strip tags and their content
        // '<span>Turnips!</span><div>Monkeys!</div>';  => $markdown now contains ""
        'remove_nodes' => 'span div',

        // 'italic_style', '_'
        'italic_style' => '_',

        // 'bold_style', '__'
        // '<em>Italic</em> and a <strong>bold</strong>';  => $markdown now contains "_Italic_ and a __bold__"
        'bold_style' => '__',

        // 'hard_break', true
        // TRUE: '<p>test<br>line break</p>'; => $markdown now contains "test\nline break"
        // FALSE: '<p>test<br>line break</p>'; => $markdown now contains "test  \nline break"
        'hard_break' => false,

        // atx => # ##
        // etx => - --
        'header_style' => 'atx',
    ],
];
