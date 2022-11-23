<?php

declare(strict_types=1);

/**
 * 技術駆動命名
 * Memory/Flagなどプログラミング用語やコンピュータ用語に基づいた名前
 */
final class MemoryStateManager
{
    public function changeIntValue01(int $changeValue):void
    {
        $value01 = 10;
        $value01 -= $changeValue;
        if ($value01 <  0) {
            $value01 = 0;
        }
    }
}

/**
 * 連番命名
 */
final class Class01
{
    public function method01():void
    {
    }
    public function method02():void
    {
    }
    public function method03():void
    {
    }
    public function method04():void
    {
    }
}
