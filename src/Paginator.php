<?php

namespace Tleckie\Paginator;

use function ceil;

/**
 * Class Paginator
 *
 * @package Tleckie\Paginator
 * @author  Teodoro Leckie Westberg <teodoroleckie@gmail.com>
 */
class Paginator implements PaginatorInterface
{
    /** @var int */
    protected int $totalRecords;

    /** @var int */
    protected int $itemsPerPage;

    /** @var int */
    protected int $currentPage;

    /** @var int */
    private int $firstPage = 1;

    /**
     * Paginator constructor.
     *
     * @param int $totalRecords
     * @param int $itemsPerPage
     * @param int $currentPage
     */
    public function __construct(
        int $totalRecords,
        int $itemsPerPage,
        int $currentPage
    ) {
        $this->setTotalRecords($totalRecords);
        $this->setItemsPerPage($itemsPerPage);
        $this->setCurrentPage($currentPage);
    }

    /**
     * @inheritdoc
     */
    public function getTotalRecords(): int
    {
        return $this->totalRecords;
    }

    /**
     * @inheritdoc
     */
    public function setTotalRecords(int $totalRecords): PaginatorInterface
    {
        $this->totalRecords = $totalRecords;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getItemsPerPage(): int
    {
        return $this->itemsPerPage;
    }

    /**
     * @inheritdoc
     */
    public function setItemsPerPage(int $itemsPerPage): PaginatorInterface
    {
        $this->itemsPerPage = $itemsPerPage;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getCurrentPage(): int
    {
        return $this->currentPage;
    }

    /**
     * @inheritdoc
     */
    public function setCurrentPage(int $currentPage): PaginatorInterface
    {
        $this->currentPage = !$currentPage ? $this->firstPage : $currentPage;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getFirstPage(): int
    {
        return $this->firstPage;
    }

    /**
     * @inheritdoc
     */
    public function getNextPage(): int
    {
        if ($this->hasNext()) {
            return $this->currentPage + $this->firstPage;
        }

        return $this->currentPage;
    }

    /**
     * @inheritdoc
     */
    public function hasNext(): bool
    {
        return $this->currentPage < $this->getLastPage();
    }

    /**
     * @inheritdoc
     */
    public function getLastPage(): int
    {
        return $this->getTotalPages();
    }

    /**
     * @inheritdoc
     */
    public function getTotalPages(): int
    {
        return ceil($this->totalRecords / $this->itemsPerPage);
    }

    /**
     * @inheritdoc
     */
    public function getPrevPage(): int
    {
        if ($this->hasPrev()) {
            return $this->currentPage - $this->firstPage;
        }

        return $this->currentPage;
    }

    /**
     * @inheritdoc
     */
    public function hasPrev(): bool
    {
        return $this->currentPage > $this->firstPage;
    }

    /**
     * @inheritdoc
     */
    public function getOffset(): int
    {
        return ($this->currentPage - $this->firstPage) * $this->itemsPerPage;
    }
}
