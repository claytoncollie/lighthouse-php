<?php declare(strict_types=1);

namespace Dzava\Lighthouse\Exceptions;

class AuditFailedException extends \Exception
{
    /**
     * @var string
     */
    protected $output;

    /**
     * @var string
     */
    protected $command;

    public function __construct(string $url, string $command, string $output = null)
    {
        parent::__construct("Audit of '{$url}' failed");
        $this->command = $command;
        $this->output  = $output;
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getOutput(): string
    {
        return $this->output;
    }
}
