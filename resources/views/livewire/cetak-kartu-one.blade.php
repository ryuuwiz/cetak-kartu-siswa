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
    <div style="width: 750px; height: 243px; margin-bottom:10px; background-image: url({{ asset("storage/".$kartu->gambar) }})">
        <img style="border: 1px solid #ffffff;position: absolute;margin-left: 21px;margin-top: 75px;" src="{{ asset("storage/".$row->foto)  }}" width="78.5px" height="110px">
        <table style="margin-top: 88px; position: absolute; right:410px; text-align: left; font-family: Cambria,sans-serif;font-size: 12px;">
            <tr>
                <td><strong style="font-size: 12px;">{{ $row->nama_lengkap }}</strong></td>
            </tr>
            <tr>
                <td><strong style="font-size: 12px;">{{ $row->nis }} / {{ $row->nisn }}</strong></td>
            </tr>
            <tr>
                <td><strong style="font-size: 12px;">{{ $row->tmpt_lhr }}</strong></td>
            </tr>
            <tr>
                <td><strong style="font-size: 12px;line-height: 1.5;">{{ $row->tgl_lhr }}</strong></td>
            </tr>
            <tr>
                <td><strong style="font-size: 12px;">{{ $row->jk }}</strong></td>
            </tr>
            <tr>
                <td><strong style="font-size: 12px;">{{ $row->alamat }}</strong></td>
            </tr>
            <tr>
                <td><strong style="font-size: 12px;">Selama Menjadi Siswa/i</strong></td>
            </tr>
        </table>
    </div>
</div>

<script>
    window.addEventListener('load', function () {
        window.print();
    });
</script>

