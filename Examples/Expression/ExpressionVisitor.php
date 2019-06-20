<?php

namespace Examples\Expression;

use Examples\Expression\Generated\Contexts\AtomContext;
use Examples\Expression\Generated\ExpressionBaseVisitor;

class ExpressionVisitor extends ExpressionBaseVisitor
{
    function visitAtom(AtomContext $ctx)
    {
        return parent::visitAtom($ctx);
    }
}