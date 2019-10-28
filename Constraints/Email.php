<?php

namespace LCV\CombinedConstraintsBundle\Constraints;

use Symfony\Component\Validator\Exception\InvalidArgumentException;

/**
 * Class Email
 * @package LCV\CombinedConstraintsBundle\Constraints
 * @Annotation
 */
class Email extends \Symfony\Component\Validator\Constraints\Email
{
    const IS_BLANK_ERROR = 'c1051bb4-d103-4f74-8988-acbcafc7fdc3';

    public $required = true;
    public $allowNull = false;

    public $normalizer;

    public $requiredMessage = 'lcv.required';

    public $message = 'lcv.invalid_email';

    public function __construct($options = null)
    {
        parent::__construct($options);

        if (null !== $this->normalizer && !\is_callable($this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The "normalizer" option must be a valid callable ("%s" given).', \is_object($this->normalizer) ? \get_class($this->normalizer) : \gettype($this->normalizer)));
        }
    }

}