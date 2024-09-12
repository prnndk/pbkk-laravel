<?php

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $posts = [
        [
            'id' => 1,
            'title' => 'Artikel 1 ashdahdahsdahdashdasjdahdaskdasjdasdasjdashd',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan orci vel nulla pellentesque fermentum. Vestibulum tempor pellentesque viverra. Praesent pharetra ultrices facilisis. Aliquam ac mauris ex. Nulla tristique, purus nec posuere vulputate, tortor quam aliquet sem, ut interdum dolor dolor nec arcu. Nulla facilisi. Fusce sit amet purus enim. Sed non dolor et velit venenatis tristique in ac tortor. Integer semper urna nunc, ut mattis ex fringilla vitae. Integer at turpis mattis, consectetur leo sed, scelerisque lorem. Suspendisse semper tortor arcu, a consectetur felis suscipit id. Cras dignissim nibh dolor, et malesuada quam maximus a. Aenean nisi velit, convallis eget eros a, placerat feugiat dolor. Nulla facilisi. Sed in finibus urna. In hac habitasse platea dictumst. Nulla sagittis urna finibus, congue tortor ac, congue felis. Suspendisse efficitur, lacus eget porttitor porttitor, purus nisl eleifend metus, quis blandit diam enim mollis nunc. Nulla mi erat, auctor ut dui et, egestas iaculis turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis molestie, odio sed pharetra pharetra, justo nisl maximus nunc, eu sagittis sem ipsum sit amet felis. In hac habitasse platea dictumst. Vestibulum ut egestas odio, viverra ullamcorper sem. Pellentesque aliquam tristique pellentesque. Nullam sollicitudin nulla sed lorem fermentum consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean eget interdum libero, nec vehicula eros. Sed vel urna vitae enim laoreet blandit. Aliquam sed metus lectus. Sed sed tortor augue. Duis porta risus dictum augue pulvinar facilisis. Nam sed sapien a tortor vehicula euismod. Sed neque velit, bibendum sit amet scelerisque quis, posuere id sapien. Morbi vestibulum non eros ac dictum. Curabitur mattis dictum tincidunt.',
            'created_at' => new Carbon("11-09-2024 11:00:60")
        ],
        [
            'id' => 2,
            'title' => 'Artikel 2',
            'author' => 'John Doe',
            'body' => 'halo dunia ini adalah body dari routers 2',
            'created_at' => new Carbon("11-09-2024 15:00:60")
        ]
    ];

    return view('welcome', ['posts' => $posts]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/article/{id}', function ($id) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Artikel 1 ashdahdahsdahdashdasjdahdaskdasjdasdasjdashd',
            'author' => 'John Doe',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan orci vel nulla pellentesque fermentum. Vestibulum tempor pellentesque viverra. Praesent pharetra ultrices facilisis. Aliquam ac mauris ex. Nulla tristique, purus nec posuere vulputate, tortor quam aliquet sem, ut interdum dolor dolor nec arcu. Nulla facilisi. Fusce sit amet purus enim. Sed non dolor et velit venenatis tristique in ac tortor. Integer semper urna nunc, ut mattis ex fringilla vitae. Integer at turpis mattis, consectetur leo sed, scelerisque lorem. Suspendisse semper tortor arcu, a consectetur felis suscipit id. Cras dignissim nibh dolor, et malesuada quam maximus a. Aenean nisi velit, convallis eget eros a, placerat feugiat dolor. Nulla facilisi. Sed in finibus urna. In hac habitasse platea dictumst. Nulla sagittis urna finibus, congue tortor ac, congue felis. Suspendisse efficitur, lacus eget porttitor porttitor, purus nisl eleifend metus, quis blandit diam enim mollis nunc. Nulla mi erat, auctor ut dui et, egestas iaculis turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis molestie, odio sed pharetra pharetra, justo nisl maximus nunc, eu sagittis sem ipsum sit amet felis. In hac habitasse platea dictumst. Vestibulum ut egestas odio, viverra ullamcorper sem. Pellentesque aliquam tristique pellentesque. Nullam sollicitudin nulla sed lorem fermentum consequat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean eget interdum libero, nec vehicula eros. Sed vel urna vitae enim laoreet blandit. Aliquam sed metus lectus. Sed sed tortor augue. Duis porta risus dictum augue pulvinar facilisis. Nam sed sapien a tortor vehicula euismod. Sed neque velit, bibendum sit amet scelerisque quis, posuere id sapien. Morbi vestibulum non eros ac dictum. Curabitur mattis dictum tincidunt.',
            'created_at' => new Carbon("11-09-2024 11:00:60")
        ],
        [
            'id' => 2,
            'title' => 'Artikel 2',
            'author' => 'John Doe',
            'body' => 'halo dunia ini adalah body dari routers 2',
            'created_at' => new Carbon("11-09-2024 15:00:60")
        ]
    ];
    $data = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

    return view('article', ['post' => $data]);
});
