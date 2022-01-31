<?php
    $taxonomies = [
        'mmorpg',
        'shooter', 
        'strategy', 
        'moba', 
        'racing', 
        'sports', 
        'social',
        'sandbox',
        'open-world',
        'survival',
        'pvp',
        'pve',
        'pixel',
        'voxel',
        'zombie',
        'turn-based',
        'first-person',
        'third-Person',
        'top-dawn',
        'tank',
        'space',
        'sailing',
        'side-scroller',
        'superhero',
        'permadeath',
        'card',
        'battle-royale',
        'mmo',
        'mmofps',
        'mmotps',
        '3d',
        '2d',
        'anime',
        'fantasy',
        'sci-fi',
        'fighting',
        'action-rpg',
        'action',
        'military',
        'martial-arts',
        'flight',
        'low-spec',
        'tower-defense',
        'horror',
        'mmorts'
    ];

    $platforms = [
        'all',
        'pc',
        'browser'
    ];

    $sort_by = [
        'release-date',
        'popularity',
        'alphabetical',
        'relevance'
    ];

    $info = "";

    sort($taxonomies);
    sort($platforms);
    sort($sort_by);
?>