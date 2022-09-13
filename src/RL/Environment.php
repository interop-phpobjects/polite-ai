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
    * @param Any $action
    * @return Set(Any $observation, Any $rewards, bool $done, Dict $info)
    */
    public function step($action) : array;

    /**
    * @return Any $observation
    **/
    public function reset() : mixed;

    /**
    * @return Any $depends on vender
    */
    public function render(string $mode=null) : mixed;

    /**
    * @return Any $depends on vender
    */
    public function show(bool $loop=null, int $delay=null) : mixed;

    /**
    *
    */
    public function close() : void;

    /**
    * @param int $seed
    * @return List<int> $seeds
    */
    public function seed(int $seed=null) : array;

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
    public function exit(Throwable $e=null) : bool;
}
