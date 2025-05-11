<?php
namespace Interop\Polite\AI\RL;

use Throwable;

/**
 *
 */
interface Environment
{
    /**
    * @return int $maxEpisodeSteps
    */
    public function maxEpisodeSteps() : int;

    /**
    * @return float $rewardThreshold
    */
    public function rewardThreshold() : float;

    /**
    * @param mixed $action
    * @return array{mixed $observation, float $rewards, bool $done, array<string,mixed> $info}
    */
    public function step(mixed $action) : array;

    /**
    * @return mixed $observation
    **/
    public function reset() : mixed;

    /**
    * @return mixed $depends on vender
    */
    public function render(?string $mode=null) : mixed;

    /**
    * @return mixed $depends on vender
    */
    public function show(?bool $loop=null, ?int $delay=null) : mixed;

    /**
    *
    */
    public function close() : void;

    /**
    * @param int $seed
    * @return array<int> $seeds
    */
    public function seed(?int $seed=null) : array;

    /**
    *
    */
    public function toString() : string;

    /**
    *
    */
    public function enter() : void;

    /**
    *
    */
    public function exit(?Throwable $e=null) : bool;
}
