<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Luxury Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('Image 2 (3).png') }}">

    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Inter:wght@400;700;900&display=swap');

        :root {
            --primary-blue: #2563eb;
            --pure-black: #000000;
            --soft-white: #f8fafc;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--soft-white);
            color: var(--pure-black);
        }

        .brutalist-title {
            font-family: 'Archivo Black', sans-serif;
            text-transform: uppercase;
            letter-spacing: -0.04em;
            line-height: 0.85;
            color: var(--pure-black);
        }

        /* High Contrast Shadow */
        .premium-card {
            background: white;
            border: 3px solid var(--pure-black);
            box-shadow: 12px 12px 0px 0px var(--primary-blue);
            transition: all 0.2s ease;
        }

        .premium-card:hover {
            transform: translate(-4px, -4px);
            box-shadow: 16px 16px 0px 0px var(--pure-black);
        }

        .sidebar-thick {
            border-right: 6px solid var(--pure-black);
            background: white;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
        }

        .custom-table th {
            background: var(--pure-black);
            color: white;
            padding: 15px;
            font-weight: 900;
            text-transform: uppercase;
            font-size: 11px;
            letter-spacing: 0.2em;
        }

        .custom-table td {
            padding: 20px;
            border-bottom: 3px solid var(--pure-black);
            font-weight: 700;
            text-transform: uppercase;
        }

        .nav-link {
            font-weight: 900;
            text-transform: uppercase;
            font-size: 13px;
            color: var(--pure-black);
            position: relative;
            padding: 5px 0;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 4px;
            bottom: 0;
            left: 0;
            background: var(--primary-blue);
            transition: width 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .btn-main {
            background: var(--primary-blue);
            color: white;
            border: 3px solid var(--pure-black);
            padding: 12px 24px;
            font-weight: 900;
            text-transform: uppercase;
            box-shadow: 6px 6px 0px 0px var(--pure-black);
            transition: 0.2s;
        }

        .btn-main:active {
            box-shadow: 0px 0px 0px 0px var(--pure-black);
            transform: translate(6px, 6px);
        }
    </style>
</head>
<body class="flex min-h-screen">

    <aside class="w-72 sidebar-thick flex flex-col p-8">
        <div class="mb-16">
            <div class="flex flex-col">
                <span class="text-2xl brutalist-title">Laundry
</span>
                <span class="text-xs font-black text-blue-600 tracking-[0.4em] uppercase">Taghazout</span>
            </div>
        </div>

        <nav class="flex flex-col gap-10">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a>
            <a href="#" class="nav-link">Orders Flow</a>
            <a href="#" class="nav-link">Client Database</a>
            <a href="#" class="nav-link">Financials</a>
        </nav>

        
        <div class="mt-auto">
            <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
        <button class="btn-main w-full" style="background: #ef4444;">Logout</button>
            </form>
    </div>
    </aside>

    <main class="flex-1 p-12">
        
        <header class="flex justify-between items-start mb-20">
            <div>
                <h1 class="text-3xl brutalist-title">Admin<br><span class="text-blue-600">Panel</span></h1>
            </div>
            <div class="bg-white border-4 border-black p-4 shadow-[8px_8px_0px_0px_#2563eb]">
                <p class="font-black text-sm uppercase">Taghazout, MA</p>
     <p class="text-xs font-bold text-slate-500">
{{ now()->format('d F Y') }}
</p>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-20">
            <div class="premium-card p-10">
                <p class="text-[11px] font-black uppercase tracking-widest mb-4">Wetsuits Ready</p>
                <h2 class="text-6xl brutalist-title">08</h2>
            </div>
            <div class="premium-card p-10">
                <p class="text-[11px] font-black uppercase tracking-widest mb-4">Daily Revenue</p>
                <h2 class="text-6xl brutalist-title">2.4K</h2>
            </div>
            <div class="premium-card p-10 bg-blue-600 !text-white">
                <p class="text-[11px] font-black uppercase tracking-widest mb-4 text-white">Active Tasks</p>
                <h2 class="text-6xl brutalist-title text-white">19</h2>
            </div>
        </div>

        <div class="premium-card bg-white overflow-hidden">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th>Customer</th>
                        <th>Project</th>
                        <th>Status</th>
                        <th>Progress</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Yassine Elite</td>
                        <td>Golf 8 Full Wrap</td>
                        <td><span class="italic font-black text-blue-600">Active</span></td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td>Moumou Frere</td>
                        <td>Laundry System</td>
                        <td><span class="italic font-black text-green-600">Done</span></td>
                        <td>100%</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </main>

</body>
</html>
