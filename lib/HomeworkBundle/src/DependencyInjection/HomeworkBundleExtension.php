<?php

namespace SymfonySkillbox\HomeworkBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class HomeworkBundleExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        dd(static::class . 'is load');
    }
}