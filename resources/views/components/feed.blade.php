<?php
declare(strict_types=1);

?>

@props([
    'title' => 'Feed',
    'posts' => [],
])
<x-content-wrapper :title="$title">
    @foreach ($posts as $post)
        <x-post-item :post="$post" />
    @endforeach
</x-content-wrapper>

<?php
