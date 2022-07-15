<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StaffdosenSeeder extends Seeder
{
    public function run()
    {
        //
        $this->db->query(
            "INSERT INTO `data_staffdosen` (`id_staffdosen`, `nip`, `nama`, `jenispegawai_id`, `departemen_id`, `unit_id`, `unit2_id`, `status_staffdosen`) VALUES
            (1, '196102121987032001', 'Dra. Endang Sri Indrawati, M.Si.', 2, 1, 1, 3, 1),
            (2, '196001141994032002', 'Dr. Yeniar Indriana, M.S.', 2, 1, 1, 3, 1),
            (3, '195712121987031002', 'Drs. Zaenal Abidin, M.Si.', 2, 1, 1, 3, 1),
            (4, '196710181992022001', 'Dr. Dra. Niken Fatimah Nurhayati, M.Pd.', 2, 1, 1, 3, 1),
            (5, '197509011999031002', 'Dr. Prasetyo Budi Widodo, S.Psi., M.Si.', 2, 1, 1, 3, 1),
            (6, '196411061990032001', 'Dra. Darosy Endah Hyoscyamina, M.Pd.', 2, 1, 1, 3, 1),
            (7, '196007011991032001', 'Dr. Hastaning Sakti, M.Kes., Psi.', 2, 1, 1, 3, 1),
            (8, '197111151998022001', 'Harlina Nurtjahjanti, S.Psi., M.Si.', 2, 1, 1, 3, 1),
            (9, '196309131991032002', 'Dr. Dra. Endah Kumala Dewi, M.Kes.', 2, 1, 7, 3, 1),
            (10, '196910131999031002', 'Suparno, S.Ag., M.S.I.', 2, 1, 1, 3, 1),
            (11, '197106251998022001', 'Anita Listiara, S.Psi., M.A.', 2, 1, 1, 3, 1),
            (12, '196603212001122001', 'Endah Mujiasih, S.Psi., M.Si.', 2, 1, 1, 3, 1),
            (13, '195912291998022001', 'Dra. Diana Rusmawati, M.Psi', 2, 1, 1, 3, 1),
            (14, '197711202001122001', 'Kartika Sari Dewi, S.Psi., M.Psi.', 2, 1, 1, 3, 1),
            (15, '197803032002121001', 'Imam Setyawan, S.Psi., M.A.', 2, 1, 1, 3, 1),
            (16, '197912122008012017', 'Jati Ariati, S.Psi., M.Psi.', 2, 1, 1, 3, 1),
            (17, '198302172008012007', 'Dr.phil. Dian Veronika Sakti Kaloeti, S.Psi., M.Psi.', 2, 1, 5, 1, 1),
            (18, '198201242008122002', 'Nailul Fauziah, S.Psi., M.Psi.', 2, 1, 1, 3, 1),
            (19, '198402282008122003', 'Dr. Ika Febrian Kristiana, S.Psi., M.Psi.', 2, 1, 1, 3, 1),
            (20, '197311122009122001', 'Dr. Novi Qonitatin, S.Psi., M.A.', 2, 1, 6, 2, 1),
            (21, '198305252009122006', 'Anggun Resdasari Prasetyo, S.Psi., M.Psi.', 2, 1, 1, 3, 1),
            (22, '197809012002122001', 'Prof. Dian Ratna Sawitri, S.Psi., M.Si., Ph.D.', 2, 1, 9, 3, 1),
            (23, '197309131999032002', 'Annastasia Ediati, S.Psi., M.Sc. Ph.D', 2, 1, 1, 3, 1),
            (24, '198212242010122002', 'Erin Ratna Kustanti, S.Psi., M.Psi., Psikolog', 2, 1, 1, 3, 1),
            (25, '198412012010122003', 'Ika Zenita Ratnaningsih, S.Psi., M.Psi.', 2, 1, 1, 3, 1),
            (26, '197806022006042001', 'Dr. Unika Prihatsanti, S.Psi., M.A.', 2, 1, 1, 3, 1),
            (27, '197812252005012001', 'Dr. Dinie Ratri Desiningrum, S.Psi., M.Si.', 2, 1, 8, 3, 1),
            (28, '198102262006042002', 'Costrie Ganes Widayanti, S.Psi., M.Si.Med., Ph.D.', 2, 1, 1, 3, 1),
            (29, '196907271999031001', 'Nofiar Aldriandy Putra, S.Psi.', 1, 2, 2, 2, 1),
            (30, '197805082002121001', 'Achmad Mujab Masykur, S.Psi., M.A.', 2, 1, 1, 3, 1),
            (31, '197705262005011003', 'Yohanis F. La Kahija, S.Psi., M.Sc.', 2, 1, 1, 3, 1),
            (32, '196406261985031003', 'Simon Puji Jatmiko, S.H.', 1, 2, 3, 2, 1),
            (33, '197408061999032001', 'Hudi Ratnaningrum, S.Pt.', 1, 2, 2, 1, 1),
            (34, '197106061997021001', 'Ngateno, S.E.', 1, 2, 3, 2, 1),
            (35, '196503181992032001', 'Saksi Tri Lestari, S.H.', 1, 2, 3, 2, 1),
            (36, '197305132009101002', 'Edi Suprapto, S.Kom.', 1, 2, 4, 2, 1),
            (37, '197203012000031002', 'Soetarto', 1, 2, 2, 1, 1),
            (38, '197803252010122002', 'Siti Yuanah, S.Hum', 1, 2, 2, 1, 1),
            (39, '197810202010121004', 'Joko Santosa, S.Kom', 1, 2, 3, 2, 1),
            (40, '197303232007011001', 'Kadisan', 1, 2, 3, 2, 1),
            (41, '197804192007012001', 'Nuryati', 1, 2, 3, 2, 1),
            (42, '197612132008101001', 'Moch Subiyanto', 1, 2, 3, 2, 1),
            (43, '197704292009101004', 'Didik Hermawan', 1, 2, 3, 2, 1),
            (44, '197510162009101002', 'Setiyawan', 1, 2, 3, 2, 1),
            (45, '196906112007011001', 'Toyib Winarso', 1, 2, 3, 2, 1),
            (46, '196409162007011002', 'Markam', 1, 2, 3, 2, 1),
            (47, '196606082007011001', 'Lagi', 1, 2, 3, 2, 1),
            (48, '198412102014042002', 'Amalia Rahmandani, S.Psi., M.Psi.', 2, 1, 1, 3, 1),
            (49, '198602152014042001', 'Dinni Asih Febriyanti, S.Psi., M.Psi.', 2, 1, 1, 3, 1),
            (50, '198408222014041001', 'Adi Dinardinata, S.Psi, M.Psi.', 2, 1, 1, 3, 1),
            (51, 'H.7.198805232009082001', 'Resti Fitria Dewi, S.E.', 1, 2, 3, 2, 1),
            (52, 'H.7.198407072010062001', 'Nur Fitriani Utami, A.Md', 1, 2, 3, 2, 1),
            (53, '197207262014091002', 'Nursidi', 1, 2, 3, 2, 1),
            (54, '198907172015042001', 'Salma, S.Psi., M.Psi.', 2, 1, 1, 3, 1),
            (55, '198106302014091002', 'Stecher Rangga Inanda, A.Md.', 1, 2, 3, 3, 1),
            (56, '198005070214012005', 'Mei Darti, A.Md.', 1, 2, 2, 1, 1),
            (57, '197301250214011002', 'Musafak', 1, 2, 2, 1, 1),
            (58, '198006040214011011', 'Sumarsono', 1, 2, 2, 1, 1),
            (59, '198306092018032001', 'Lusi Nur Ardhiani, S.Psi, M.Psi', 2, 1, 1, 3, 1),
            (60, '199202232018031001', 'Muhammad Zulfa Alfaruqy, S.Psi., M.A', 2, 1, 1, 3, 1),
            (61, '198808082019032019', 'Agustin Erna Fatmasari, S.Psi., M.A.', 2, 1, 1, 3, 1),
            (62, 'H.7.198709082021042001', 'Kristiani Nira Wijayanti, S.Psi.', 1, 2, 2, 1, 1),
            (63, 'H.7.198206072021041001', 'Joni Syahbana', 1, 2, 2, 1, 1),
            (64, 'H.7.198212242021041001', 'Didi Herman Susilo, A.Md.', 1, 2, 3, 2, 1),
            (65, 'H.7.199501172021102001', 'Anggit Dwi Nugraheni, S.Ak.', 1, 2, 3, 2, 1),
            (66, 'H.7.199405192021102001', 'Dwi Widyastuti, A.Md.Kom.', 1, 2, 3, 2, 1),
            (67, 'H.7.199412262021101001', 'Muhamad Rohmatul Amin', 1, 2, 3, 2, 1),
            (68, 'H.7.198808152022041001', 'Ahsanur Rozal', 1, 2, 3, 2, 1),
            (69, 'H.7.199210042022041001', 'Nanang Setiono', 1, 2, 3, 2, 1),
            (70, 'H.7.199808072022041001', 'Muhammad Furqon Warid', 1, 2, 3, 2, 1),
            (71, 'H.7.199510142022041001', 'Dwi Hardani Oktawirawan, S.Psi., M.Si.', 2, 1, 1, 3, 1),
            (72, 'H.7.199601082022042001', 'Jessica Dhoria Arywibowo, S.Psi., M.Psi., Psikolog', 2, 1, 1, 3, 1);" 
        );
    }
}
