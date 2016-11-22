<?php

namespace Oro\Bundle\SalesBundle\Tools\Customers;

use CG\Generator\PhpClass;

use Oro\Bundle\EntityExtendBundle\Tools\GeneratorExtensions\AbstractAssociationEntityGeneratorExtension;
use Oro\Bundle\SalesBundle\Entity\Opportunity;
use Oro\Bundle\SalesBundle\EntityConfig\CustomerScope;

class OpportunityGeneratorExtension extends AbstractAssociationEntityGeneratorExtension
{
    /**
     * {@inheritdoc}
     */
    public function supports(array $schema)
    {
        return
            $schema['class'] === Opportunity::class
            && parent::supports($schema);
    }

    /**
     * {@inheritdoc}
     */
    protected function getAssociationKind()
    {
        return CustomerScope::ASSOCIATION_KIND;
    }

    /**
     * {@inheritdoc}
     */
    public function generate(array $schema, PhpClass $class)
    {
        $class->addInterfaceName('Oro\Bundle\SalesBundle\Model\CustomerAssociationInterface');

        parent::generate($schema, $class);
    }
}
