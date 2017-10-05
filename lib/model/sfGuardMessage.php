<?php

/**
 *
 * @author Tomasz Jakub Rup <tomasz.rup@gmail.com>
 */
class sfGuardMessage extends BasesfGuardMessage
{
    public function __toString()
    {
        return $this->getId();
    }
} // sfGuardMessage
