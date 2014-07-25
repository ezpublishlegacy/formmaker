<?php

namespace MakingWaves\FormMakerBundle\Services;

use MakingWaves\FormMakerBundle\Entity\FormAttributes;
use MakingWaves\FormMakerBundle\Services\Page\ConfirmationPage;
use MakingWaves\FormMakerBundle\Services\Page\FirstPage;
use MakingWaves\FormMakerBundle\Services\Page\MiddlePage;
use MakingWaves\FormMakerBundle\Services\Page\Page;
use MakingWaves\FormMakerBundle\Services\Page\ReceiptPage;

/**
 * Class PagesFactory
 * @package MakingWaves\FormMakerBundle\Services
 */
class PagesFactory
{
    /**
     * @var int
     */
    private $formId;

    /**
     * @param $formId
     */
    public function __construct( $formId )
    {
        $this->formId = $formId;

    }

    /**
     * @param Page $page
     * @param null|string $pageTitle
     * @param null|FormAttributes $pageSeparator
     * @param null|array $pageAttributes
     * @return Page
     */
    public function factoryMethod( Page $page, $pageTitle = null, $pageSeparator = null, $pageAttributes = null )
    {
        if ( $page instanceof FirstPage ) {

            $this->createFirstPage( $page, $pageTitle, $pageAttributes );
        }
        elseif ( $page instanceof MiddlePage ) {

            $this->createMiddlePage( $page, $pageSeparator, $pageAttributes );
        }
        elseif( $page instanceof ConfirmationPage ) {

            $this->createConfirmationPage( $page, $pageTitle );
        }
        elseif( $page instanceof ReceiptPage ) {

            $this->createReceiptPage( $page, $pageTitle );
        }

        return $page;
    }

    /**
     * @param FirstPage $page
     * @param string $pageTitle
     * @param array $pageAttributes
     */
    private function createFirstPage( FirstPage $page, $pageTitle, array $pageAttributes )
    {
        $page->setPageTitle( $pageTitle );
        $page->setPageAttributes( $pageAttributes );
    }

    /**
     * @param ConfirmationPage $page
     * @param string $pageTitle
     */
    private function createConfirmationPage( ConfirmationPage $page, $pageTitle )
    {
        $page->setPageTitle( $pageTitle );
    }

    /**
     * @param ReceiptPage $page
     * @param string $pageTitle
     */
    private function createReceiptPage( ReceiptPage $page, $pageTitle )
    {
        $page->setPageTitle( $pageTitle );
    }

    /**
     * @param MiddlePage $page
     * @param FormAttributes $pageSeparator
     * @param array $pageAttributes
     */
    private function createMiddlePage( MiddlePage $page, FormAttributes $pageSeparator, array $pageAttributes )
    {
        $page->setPageSeparator( $pageSeparator );
        $page->setPageAttributes( $pageAttributes );
    }
} 