<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('admin.dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Beranda', route('admin.dashboard'));
});

// Author Index
Breadcrumbs::for('admin.author.index', function (BreadcrumbTrail $trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
});

// Author Create
Breadcrumbs::for('admin.author.create', function (BreadcrumbTrail $trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Tambah Penulis', route('admin.author.create'));
});

// Author Edit
Breadcrumbs::for('admin.author.edit', function (BreadcrumbTrail $trail, $author) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Penulis', route('admin.author.index'));
    $trail->push('Edit Penulis', route('admin.author.edit', $author));
});


// Book Index
Breadcrumbs::for('admin.book.index', function (BreadcrumbTrail $trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
});

// Book Create
Breadcrumbs::for('admin.book.create', function (BreadcrumbTrail $trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
    $trail->push('Tambah Buku', route('admin.book.create'));
});

// Book Edit
Breadcrumbs::for('admin.book.edit', function (BreadcrumbTrail $trail, $book) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Buku', route('admin.book.index'));
    $trail->push('Edit Buku', route('admin.book.edit', $book));
});


// Borrow Index
Breadcrumbs::for('admin.borrow.index', function (BreadcrumbTrail $trail) {
    $trail->push('Beranda', route('admin.dashboard'));
    $trail->push('Peminjaman', route('admin.borrow.index'));
});
