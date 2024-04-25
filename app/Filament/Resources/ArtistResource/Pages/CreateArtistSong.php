<?php

namespace App\Filament\Resources\ArtistResource\Pages;

use App\Filament\Resources\ArtistResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Guava\FilamentNestedResources\Concerns\NestedPage;
use Guava\FilamentNestedResources\Pages\CreateRelatedRecord;

class CreateArtistSong extends CreateRelatedRecord
{
    use NestedPage;

    protected static string $resource = ArtistResource::class;

    protected static string $relationship = 'songs';
}
