<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Spatie\DbDumper\Databases\MySql;

class SchemaMysqlDumpCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schema:mysqldump {--drop} {--refresh}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $dbHost = config('database.connections.mysql.host');
        $dbName = config('database.connections.mysql.database');
        $dbUsername = config('database.connections.mysql.username');
        $dbPassword = config('database.connections.mysql.password');
        $dumpFile = config('database.connections.mysql.database') . '.dump';
        $directory = base_path('database' . DIRECTORY_SEPARATOR . 'schema');
        $laravelDumpFile = config('database.connections.mysql.driver') . '-schema.dump';

        if ($this->option('drop') && File::isDirectory($directory)) {
            File::deleteDirectory($directory);

            return Command::SUCCESS;
        }

        if ($this->option('refresh') && File::isDirectory($directory)) {
            File::deleteDirectory($directory);
        }

        MySql::create()
            ->setHost($dbHost)
            ->setDbName($dbName)
            ->setUserName($dbUsername)
            ->setPassword($dbPassword)
            ->dumpToFile($dumpFile);

        if (!File::isDirectory($directory)) {
            File::makeDirectory($directory);
        }

        File::move(base_path($dumpFile), $directory . DIRECTORY_SEPARATOR  . $laravelDumpFile);

        return Command::SUCCESS;
    }
}
