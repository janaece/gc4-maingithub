<?php
/*
 * This file is part of the prestaPaypalPlugin package.
 * (c) Matthieu CRINQUAND <mcrinquand@prestaconcept.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @package PayPal
 */

/**
 * Make sure our parent class is defined.
 */
require_once 'PayPal/Type/AbstractResponseType.php';

/**
 * BillOutstandingAmountResponseType
 *
 * @package PayPal
 */
class BillOutstandingAmountResponseType extends AbstractResponseType
{
    var $BillOutstandingAmountResponseDetails;

    function BillOutstandingAmountResponseType()
    {
        parent::AbstractResponseType();
        $this->_namespace = 'urn:ebay:api:PayPalAPI';
        $this->_elements = array_merge($this->_elements,
            array (
              'BillOutstandingAmountResponseDetails' => 
              array (
                'required' => true,
                'type' => 'BillOutstandingAmountResponseDetailsType',
                'namespace' => 'urn:ebay:apis:eBLBaseComponents',
              ),
            ));
    }

    function getBillOutstandingAmountResponseDetails()
    {
        return $this->BillOutstandingAmountResponseDetails;
    }
    function setBillOutstandingAmountResponseDetails($BillOutstandingAmountResponseDetails, $charset = 'iso-8859-1')
    {
        $this->BillOutstandingAmountResponseDetails = $BillOutstandingAmountResponseDetails;
        $this->_elements['BillOutstandingAmountResponseDetails']['charset'] = $charset;
    }
}
