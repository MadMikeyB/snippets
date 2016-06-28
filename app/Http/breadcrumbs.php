<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
    $breadcrumbs->push('Snippets', route('snippets.index'));
});

// Home > Login
Breadcrumbs::register('login', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
    $breadcrumbs->push('Login', route('login'));
});

// Home > Register
Breadcrumbs::register('register', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
    $breadcrumbs->push('Register', route('register'));
});

// Home > Reset Password
Breadcrumbs::register('password.reset', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
    $breadcrumbs->push('Reset Password', route('password.reset'));
});



// Home > Snippets
Breadcrumbs::register('snippets.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Snippets', route('snippets.index'));
});

// Home > Snippets > Create
Breadcrumbs::register('snippets.create', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Create Snippet', route('snippets.create'));
});

// Home > Snippets > [Snippet]
Breadcrumbs::register('snippets.show', function($breadcrumbs, $snippet)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($snippet->title, route('snippets.show', $snippet->id));
});

// Home > Tags
Breadcrumbs::register('tags.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Tags', route('tags.index'));
});

// Home > Tags > [Tag]
Breadcrumbs::register('tags.show', function($breadcrumbs, $tag)
{
    $breadcrumbs->parent('tags');
    $breadcrumbs->push($tag->title, route('tags.show', $tag->id));
});

// Home > Comments
Breadcrumbs::register('comments.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Comments', route('comments.index'));
});

// Home > Comments > [Comment]
Breadcrumbs::register('comments.show', function($breadcrumbs, $comment)
{
    $breadcrumbs->parent('comments');
    $breadcrumbs->push($comment->title, route('comments.show', $comment->id));
});