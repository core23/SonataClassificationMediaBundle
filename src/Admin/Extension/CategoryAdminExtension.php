<?php

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\ClassificationMediaBundle\Admin\Extension;

use Sonata\AdminBundle\Admin\AbstractAdminExtension;
use Sonata\AdminBundle\Form\FormMapper;

final class CategoryAdminExtension extends AbstractAdminExtension
{
    /**
     * {@inheritdoc}
     */
    public function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('General')
                ->add('media', 'sonata_type_model_list', array(
                    'required' => false,
                    'translation_domain' => 'SonataClassificationMediaBundle',
                ), array(
                    'link_parameters' => array(
                        'provider' => 'sonata.media.provider.image',
                        'context' => 'sonata_collection',
                    ),
                ))
            ->end();
    }
}
