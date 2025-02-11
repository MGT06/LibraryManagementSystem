use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeminjamanTable extends Migration
{
    public function up()
    {
        Schema::create('peminjaman1', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('nis');
            $table->string('judul_buku');
            $table->integer('lama_pinjam');
            $table->timestamp('tanggal_pinjam')->useCurrent();
            $table->timestamp('tanggal_kembali')->nullable();
            $table->enum('status', ['dipinjam', 'dikembalikan'])->default('dipinjam');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
} 