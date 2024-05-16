<?php
/**
 * Copyright © 2017 Divante, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace Oro\Bundle\ElasticsearchBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ResetIndexCommand
 */
class ResetIndexCommand extends Command
{
    /**
     * @inheritDoc
     */
    protected function configure()
    {
        $this->setName('divante:elasticsearch:reset-index')->setDescription('Reset and creates index');
    }

    /**
     * @inheritDoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Starting resetting index');
        $indexer = $this->getContainer()->get('oro_website_search.indexer');
        $indexer->resetIndex(null, []);
        $output->writeln('Index recreated');
    }
}
