<?php

namespace Tleckie\Paginator;

/**
 * Interface PaginatorInterface
 *
 * @package Tleckie\Paginator
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
interface PaginatorInterface
{
    /**
     * @return int
     */
    public function getTotalRecords(): int;

    /**
     * @return int
     */
    public function getItemsPerPage(): int;

    /**
     * @return int
     */
    public function getCurrentPage(): int;

    /**
     * @param int $currentPage
     * @return PaginatorInterface
     */
    public function setCurrentPage(int $currentPage): PaginatorInterface;

    /**
     * @param int $totalRecords
     * @return PaginatorInterface
     */
    public function setTotalRecords(int $totalRecords): PaginatorInterface;

    /**
     * @param int $itemsPerPage
     * @return PaginatorInterface
     */
    public function setItemsPerPage(int $itemsPerPage): PaginatorInterface;

    /**
     * @return bool
     */
    public function hasPrev(): bool;

    /**
     * @return bool
     */
    public function hasNext(): bool;

    /**
     * @return int
     */
    public function getNextPage(): int;

    /**
     * @return int
     */
    public function getPrevPage(): int;

    /**
     * @return int
     */
    public function getLastPage(): int;

    /**
     * @return int
     */
    public function getFirstPage(): int;

    /**
     * @return int
     */
    public function getOffset(): int;

    /**
     * @return int
     */
    public function getTotalPages(): int;
}
