<?php

namespace Tleckie\Paginator\Tests;

use PHPUnit\Framework\TestCase;
use Tleckie\Paginator\Paginator;

/**
 * Class PaginatorTest
 *
 * @package Tleckie\Paginator\Tests
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class PaginatorTest extends TestCase
{
    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function totalRecords(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);

        static::assertEquals($totalRecords, $paginator->getTotalRecords());
        static::assertEquals(1, $paginator->getFirstPage());
    }

    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function getItemsPerPage(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);
        static::assertEquals($itemsPerPage, $paginator->getItemsPerPage());
    }

    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function hasPrev(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);
        static::assertEquals($hasPrev, $paginator->hasPrev());
    }

    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function hasNext(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);
        static::assertEquals($hasNext, $paginator->hasNext());
    }

    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function getNextPage(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);
        static::assertEquals($nextPage, $paginator->getNextPage());
    }

    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function getPrevPage(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);
        static::assertEquals($prevPage, $paginator->getPrevPage());
    }

    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function getOffset(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);
        static::assertEquals($offset, $paginator->getOffset());
    }

    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function getLastPage(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);
        static::assertEquals($lastPage, $paginator->getLastPage());
    }

    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function getTotalPages(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);
        static::assertEquals($lastPage, $paginator->getTotalPages());
    }

    /**
     * @test
     * @dataProvider checkDataProvider
     * @param int  $totalRecords
     * @param int  $itemsPerPage
     * @param int  $currentPage
     * @param bool $hasPrev
     * @param bool $hasNext
     * @param int  $nextPage
     * @param int  $prevPage
     * @param int  $offset
     * @param int  $lastPage
     */
    public function getCurrentPage(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage,
        bool $hasPrev,
        bool $hasNext,
        int $nextPage,
        int $prevPage,
        int $offset,
        int $lastPage,
    ): void {
        $paginator = new Paginator($totalRecords, $itemsPerPage, $currentPage);
        static::assertEquals(!$currentPage ? 1 : $currentPage, $paginator->getCurrentPage());
    }

    /**
     * @return array[]
     */
    public function checkDataProvider(): array
    {
        return [
            [100, 10, 0, false, true, 2, 1, 0, 10],
            [100, 10, 1, false, true, 2, 1, 0, 10],
            [100, 10, 2, true, true, 3, 1, 10, 10],
            [100, 10, 3, true, true, 4, 2, 20, 10],
            [100, 10, 4, true, true, 5, 3, 30, 10],
            [100, 10, 5, true, true, 6, 4, 40, 10],
            [100, 10, 6, true, true, 7, 5, 50, 10],
            [100, 10, 7, true, true, 8, 6, 60, 10],
            [100, 10, 8, true, true, 9, 7, 70, 10],
            [100, 10, 10, true, false, 10, 9, 90, 10],
            [109, 10, 11, true, false, 11, 10, 100, 11],
            [101, 10, 11, true, false, 11, 10, 100, 11],
        ];
    }
}
