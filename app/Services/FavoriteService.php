<?php

namespace App\Services;

use App\Repository\Contract\FavoriteRepository;

class FavoriteService
{
    private $favorite;

    public function __construct(FavoriteRepository $favorite)
    {
        $this->favorite = $favorite;
    }

    public function switchFavorite(int $bookId, int $userId, string $createdAt): int
    {
        return $this->favorite->switch($bookId, $userId, $createdAt);
    }
}