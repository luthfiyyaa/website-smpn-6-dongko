@extends('layouts.admin')

@section('title', 'PPDB Responses - Admin Panel')

@section('content')
<div class="container-fluid px-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Pendaftar PPDB</h1>
        <div class="d-flex gap-2">
            @if($spreadsheetUrl)
                <a href="{{ $spreadsheetUrl }}" 
                   target="_blank" 
                   class="btn btn-success">
                    <i class="fas fa-external-link-alt"></i> Buka di Google Sheets
                </a>
                <a href="{{ $spreadsheetUrl }}/export?format=xlsx" 
                   class="btn btn-primary">
                    <i class="fas fa-download"></i> Download Excel
                </a>
            @endif
        </div>
    </div>

    <!-- Info Card -->
    <div class="card border-left-primary shadow mb-4">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Google Form Responses
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        Data pendaftar PPDB terintegrasi dengan Google Forms
                    </div>
                    <p class="text-muted mt-2 mb-0">
                        <i class="fas fa-info-circle"></i> 
                        Data akan otomatis terupdate sesuai dengan response di Google Forms
                    </p>
                </div>
                <div class="col-auto">
                    <i class="fas fa-file-spreadsheet fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>

    @if($spreadsheetUrl)
        <!-- Embedded Google Sheets -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Data Pendaftar</h6>
                <button class="btn btn-sm btn-outline-secondary" onclick="reloadIframe()">
                    <i class="fas fa-sync-alt"></i> Refresh
                </button>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive" style="height: 600px; overflow: hidden;">
                    <iframe 
                        id="sheetsIframe"
                        src="{{ $spreadsheetUrl }}/htmlembed" 
                        frameborder="0"
                        style="width: 100%; height: 100%; border: none;"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>

        <!-- Statistics Cards (Optional) -->
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Total Pendaftar
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <span id="totalRegistrants">-</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Status
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <i class="fas fa-check-circle text-success"></i> Aktif
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-check fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Last Updated
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <span id="lastUpdate">-</span>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clock fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <!-- No URL Configured -->
        <div class="card shadow">
            <div class="card-body text-center py-5">
                <i class="fas fa-exclamation-triangle fa-3x text-warning mb-3"></i>
                <h4>Google Sheets URL Belum Dikonfigurasi</h4>
                <p class="text-muted mb-4">
                    Silakan tambahkan URL Google Sheets ke file .env
                </p>
                <div class="alert alert-info text-left" role="alert">
                    <strong>Cara Setup:</strong>
                    <ol class="mb-0 mt-2">
                        <li>Buka Google Sheets response dari Google Form</li>
                        <li>Klik <strong>File → Share → Publish to web</strong></li>
                        <li>Pilih sheet yang ingin dipublish</li>
                        <li>Klik <strong>Publish</strong> dan copy URL-nya</li>
                        <li>Tambahkan ke file .env: <code>GOOGLE_SHEETS_PPDB_URL=your-url-here</code></li>
                    </ol>
                </div>
            </div>
        </div>
    @endif

    <!-- Instructions -->
    <div class="card shadow mt-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">
                <i class="fas fa-question-circle"></i> Cara Menggunakan
            </h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="font-weight-bold">Melihat Data:</h6>
                    <ul class="text-muted">
                        <li>Data ditampilkan langsung dari Google Sheets</li>
                        <li>Klik tombol "Refresh" untuk update data terbaru</li>
                        <li>Gunakan tombol "Buka di Google Sheets" untuk edit langsung</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h6 class="font-weight-bold">Download Data:</h6>
                    <ul class="text-muted">
                        <li>Klik "Download Excel" untuk export ke file .xlsx</li>
                        <li>Atau buka di Google Sheets dan download dari sana</li>
                        <li>Format: File → Download → Microsoft Excel (.xlsx)</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function reloadIframe() {
    const iframe = document.getElementById('sheetsIframe');
    iframe.src = iframe.src;
    
    // Update last update time
    const now = new Date();
    document.getElementById('lastUpdate').textContent = now.toLocaleTimeString('id-ID');
}

// Set initial last update time
document.addEventListener('DOMContentLoaded', function() {
    const now = new Date();
    const lastUpdateEl = document.getElementById('lastUpdate');
    if (lastUpdateEl) {
        lastUpdateEl.textContent = now.toLocaleTimeString('id-ID');
    }
});

// Optional: Auto refresh every 5 minutes
setInterval(function() {
    reloadIframe();
}, 300000); // 5 minutes
</script>
@endsection