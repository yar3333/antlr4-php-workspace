<?php

use generated\Contexts\AtomContext;
use generated\ExpressionBaseVisitor;

class ExpressionVisitor extends ExpressionBaseVisitor
{
    function visitAtom(AtomContext $ctx)
    {
        return parent::visitAtom($ctx);
    }
}