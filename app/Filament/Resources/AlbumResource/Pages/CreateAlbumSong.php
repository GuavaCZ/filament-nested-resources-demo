<?php

namespace App\Filament\Resources\AlbumResource\Pages;

use App\Filament\Resources\AlbumResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Guava\FilamentNestedResources\Concerns\NestedPage;
use Guava\FilamentNestedResources\Pages\CreateRelatedRecord;

class CreateAlbumSong extends CreateRelatedRecord
{
    use NestedPage;

    protected static string $resource = AlbumResource::class;
    protected static string $relationship = 'songs';
}
