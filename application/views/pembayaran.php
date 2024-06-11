<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php 
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach($keranjang as $item)
                    {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,00,',','.');
                ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?>">
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nomor Telepon</label>
                    <input type="text" name="no_tlpn" placeholder="Nomor Telepon Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jasa Pengiriman</label>
                    <select class="form-control">
                        <option value="">JNE</option>
                        <option value="">TIKI</option>
                        <option value="">Sicepat</option>
                        <option value="">JNT</option>
                        <option value="">Gojek Sameday</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Pilih BANK</label>
                    <select class="form-control">
                        <option value="">BCA - XXXXXXXXX</option>
                        <option value="">BNI - XXXXXXXXX</option>
                        <option value="">BRI - XXXXXXXXX</option>
                        <option value="">MANDIRI - XXXXXXXXX</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
            </form>

            <?php
            } else{
                echo"<h4>Keranjang Belanja Anda Masih Kosong";
            }
            ?>
        </div>
        
        <div class="col-md-2"></div>
    </div>
</div>