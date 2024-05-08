use Illuminate\Console\Command;

class DeleteCookie extends Command
{
    protected $signature = 'cookie:delete {name}';
    protected $description = 'Delete a cookie by name';

    public function handle()
    {
        $cookieName = $this->argument('name');
        $this->info("Deleting cookie: $cookieName");
        
        $response = response('Deleting cookie')->withCookie(cookie()->forget($cookieName));
        $this->info("Cookie $cookieName deleted successfully.");
    }
}