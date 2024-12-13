<style>
    @media print {
        * {
            -webkit-print-color-adjust: exact;
        }
    }

    @page {
        size: 21cm 30cm;
        margin: 5mm 7mm 5mm 7mm;
        /* change the margins as you want them to be. */
    }

    table {
        border-spacing: 0;
    }

    /* cellspacing */

    th,
    td {
        padding: 1px;
    }
</style>

<div style="font-size: 12px;margin-top:0;position:absolute;">
    @foreach ($siswa as $row)
    <div style="width: 750px; height: 243px; margin-bottom:11px; background-image: url({{ asset("storage/".$kartu->gambar) }})">
        <img style="border: 1px solid #ffffff;position: absolute;margin-left: 21px;margin-top: 75px;" src="{{ asset("storage/".$row->foto)  }}" width="78.5px" height="110px" alt="">
        <table style="margin-top: 88px; position: absolute; left:205px; text-align: left; font-family: Cambria,sans-serif;font-size: 12px;">
            <div style="padding-top: 0;">
                <tr>
                    <td><strong style="font-size: 11px;">{{ $row->nama_lengkap }}</strong></td>
                </tr>
                <tr>
                    <td><strong style="font-size: 11px;line-height: 1rem;">{{ $row->nis }} / {{ $row->nisn }}</strong></td>
                </tr>
                <tr>
                    <td><strong style="font-size: 11px;">{{ $row->tmpt_lhr }}</strong></td>
                </tr>
                <tr>
                    <td><strong style="font-size: 11px;line-height: 1rem;">{{ $row->tgl_lhr }}</strong></td>
                </tr>
                <tr>
                    <td><strong style="font-size: 11px;">{{ $row->jk }}</strong></td>
                </tr>
                <tr>
                    <td><strong style="font-size: 11px;">{!!
                        substr($row->alamat, 0, strpos($row->alamat, ","))
                    !!}</strong></td>
                </tr>
                <tr>
                    <td><strong style="font-size: 11px;">Selama Menjadi Siswa/i</strong></td>
                </tr>
            </div>
        </table>
    </div>
        @endforeach
</div>

@script
<script>
    window.addEventListener('livewire:navigated', function () {
        window.print();
        window.focus();
    });
</script>
@endscript

