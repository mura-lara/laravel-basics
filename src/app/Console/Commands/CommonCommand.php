<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CommonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:common {filename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filename = $this->argument('filename');
        $directory = app_path('Common');
        $filePath = "$directory/$filename.php";

        // ディレクトリが存在しない場合は作成
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        // ファイルが既に存在するかチェック
        if (file_exists($filePath)) {
            $this->error("Common file $filename already exists. No changes were made.");
            return; // ファイルが存在する場合は処理を中断
        }

        // ファイルを生成し、内容を記述
        $content = "<?php\n\nnamespace App\\Common;\n\nclass $filename {\n    // Your class content here\n}\n";
        file_put_contents($filePath, $content);

        $this->info("Common file $filename created successfully in the Common directory with namespace.");
    }

}
