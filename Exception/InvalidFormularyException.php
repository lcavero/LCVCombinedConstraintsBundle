<?php

namespace LCV\CombinedConstraintsBundle\Exception;

use LCV\CommonExceptions\Exception\ApiException;

class InvalidFormularyException extends ApiException
{
    protected $constraintsErrors;

    public function __construct($constraintsErrors = [],
                                $message = "lcv.invalid_formulary",
                                $translationParams = [],
                                \Exception $previous = null,
                                $statusCode = 400)
    {
        $this->constraintsErrors = $constraintsErrors;
        parent::__construct($statusCode, $message, $translationParams, $previous);
    }

    /**
     * @return array
     */
    public function getConstraintsErrors()
    {
        return $this->constraintsErrors;
    }


}
