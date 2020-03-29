<?php

namespace App\Repository\Contract;

interface FavoriteRepository
{
    /*
     * @return int
     */
    public function switch(int $bookId, int $userId, string $createdAt) : int;
}

