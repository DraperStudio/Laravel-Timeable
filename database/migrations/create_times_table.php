<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Timeable.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTimesTable extends Migration
{
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('timeable');
            $table->string('day');
            $table->time('open');
            $table->time('close');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('times');
    }
}
