<?php

namespace Infection\Console\OutputFormatter;


use Infection\Process\MutantProcess;

interface OutputFormatter
{
    /**
     * Triggered when mutation testing is being started
     *
     * @param int $mutationCount
     */
    public function start(int $mutationCount);

    /**
     * Triggered each time mutation process is finished for one Mutant
     *
     * @param MutantProcess $mutantProcess
     * @param int $mutationCount
     */
    public function advance(MutantProcess $mutantProcess, int $mutationCount);

    /**
     * Triggered when mutation testing is finished
     */
    public function finish();
}