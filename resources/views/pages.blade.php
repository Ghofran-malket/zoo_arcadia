<?php $page=TCG\Voyager\Models\Page::first(); ?>
@can('browse', $page)
    <h1>You can</h1>
@else
    <h2>you can not </h2>
@endcan