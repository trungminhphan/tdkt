
/** chucvu indexes **/
db.getCollection("chucvu").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** danhhieu indexes **/
db.getCollection("danhhieu").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** danhhieukhenthuong indexes **/
db.getCollection("danhhieukhenthuong").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** donvi indexes **/
db.getCollection("donvi").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** nam indexes **/
db.getCollection("nam").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** nhansu indexes **/
db.getCollection("nhansu").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** sangkienkinhnghiem indexes **/
db.getCollection("sangkienkinhnghiem").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** sessions indexes **/
db.getCollection("sessions").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** thidua indexes **/
db.getCollection("thidua").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** thiduatapthe indexes **/
db.getCollection("thiduatapthe").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** users indexes **/
db.getCollection("users").ensureIndex({
  "_id": NumberInt(1)
},[
  
]);

/** chucvu records **/
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febcf5d89398ec0a00003b"),
  "ten": "Bí thư Tỉnh ủy"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd00d89398ec0a00003c"),
  "ten": "Phó Bí thư Thường trực Tỉnh ủy"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd0bd89398ec0a00003d"),
  "ten": "Chánh Văn phòng"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd12d89398ec0a00003e"),
  "ten": "Phó Chánh Văn phòng"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd1bd89398ec0a00003f"),
  "ten": "Trưởng phòng"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd25d89398ec0a000040"),
  "ten": "Phó Trưởng phòng"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd2dd89398ec0a000041"),
  "ten": "Giám đốc"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd34d89398ec0a000042"),
  "ten": "Phó Giám đốc"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd3bd89398ec0a000043"),
  "ten": "Chuyên viên"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd42d89398ec0a000044"),
  "ten": "Cán bộ kỹ thuật"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd4bd89398ec0a000045"),
  "ten": "Cán sự"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd52d89398ec0a000046"),
  "ten": "Nhân viên phục vụ"
});
db.getCollection("chucvu").insert({
  "_id": ObjectId("58febd5ad89398ec0a000047"),
  "ten": "Lái xe"
});

/** danhhieu records **/
db.getCollection("danhhieu").insert({
  "_id": ObjectId("58f58766d89398c80d00002b"),
  "ten": "Chiến sỉ thi đua Cơ sở"
});
db.getCollection("danhhieu").insert({
  "_id": ObjectId("58f58774d89398c80d00002c"),
  "ten": "Lao động tiên tiến"
});
db.getCollection("danhhieu").insert({
  "_id": ObjectId("58f58785d89398c80d00002d"),
  "ten": "Chiến sĩ thi đua cấp tỉnh"
});

/** danhhieukhenthuong records **/
db.getCollection("danhhieukhenthuong").insert({
  "_id": ObjectId("58fec032d89398f00800002a"),
  "ten": "Huân chương lao động"
});
db.getCollection("danhhieukhenthuong").insert({
  "_id": ObjectId("58fec03dd89398ec0a000052"),
  "ten": "Bằng khen của Thủ tướng Chính phú"
});
db.getCollection("danhhieukhenthuong").insert({
  "_id": ObjectId("58fec045d89398ec0a000053"),
  "ten": "Bằng khen của Bộ, Ngành Trung ương"
});
db.getCollection("danhhieukhenthuong").insert({
  "_id": ObjectId("58fec04dd89398ec0a000054"),
  "ten": "Bằng khen của UBND tỉnh"
});

/** donvi records **/
db.getCollection("donvi").insert({
  "_id": ObjectId("58febd9bd89398ec0a000048"),
  "ten": "Tỉnh ủy",
  "id_parent": "",
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});
db.getCollection("donvi").insert({
  "_id": ObjectId("58febdd1d89398ec0a000049"),
  "ten": "Văn phòng Tỉnh ủy",
  "id_parent": ObjectId("58febd9bd89398ec0a000048"),
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});
db.getCollection("donvi").insert({
  "_id": ObjectId("58febdf6d89398ec0a00004a"),
  "ten": "Phòng Hành chính - Cơ yếu",
  "id_parent": ObjectId("58febdd1d89398ec0a000049"),
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});
db.getCollection("donvi").insert({
  "_id": ObjectId("58febe06d89398ec0a00004b"),
  "ten": "Phòng Tổng hợp",
  "id_parent": ObjectId("58febdd1d89398ec0a000049"),
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});
db.getCollection("donvi").insert({
  "_id": ObjectId("58febe14d89398ec0a00004c"),
  "ten": "Phòng Kinh tế - Xã hội",
  "id_parent": ObjectId("58febdd1d89398ec0a000049"),
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});
db.getCollection("donvi").insert({
  "_id": ObjectId("58febe23d89398ec0a00004d"),
  "ten": "Phòng Quản trị",
  "id_parent": ObjectId("58febdd1d89398ec0a000049"),
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});
db.getCollection("donvi").insert({
  "_id": ObjectId("58febe31d89398ec0a00004e"),
  "ten": "Phòng Tài chính Đảng",
  "id_parent": ObjectId("58febdd1d89398ec0a000049"),
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});
db.getCollection("donvi").insert({
  "_id": ObjectId("58febe43d89398ec0a00004f"),
  "ten": "Phòng Lưu trữ",
  "id_parent": ObjectId("58febdd1d89398ec0a000049"),
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});
db.getCollection("donvi").insert({
  "_id": ObjectId("58febe4ed89398ec0a000050"),
  "ten": "Trung tâm Công nghệ Thông tin",
  "id_parent": ObjectId("58febdd1d89398ec0a000049"),
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});
db.getCollection("donvi").insert({
  "_id": ObjectId("58febe5cd89398ec0a000051"),
  "ten": "Nhà khách Thắng Lợi",
  "id_parent": ObjectId("58febdd1d89398ec0a000049"),
  "diachi": "Số 01, Tôn Đức Thắng, P. Mỹ Bình, TPLX, An Giang",
  "dienthoai": "(0296).3852.004",
  "thongtinkhac": ""
});

/** nam records **/
db.getCollection("nam").insert({
  "_id": ObjectId("58fec1acd89398ec0a000055"),
  "ten": NumberInt(2016)
});
db.getCollection("nam").insert({
  "_id": ObjectId("58fec1b1d89398ec0a000056"),
  "ten": NumberInt(2017)
});
db.getCollection("nam").insert({
  "_id": ObjectId("58fec1c5d89398ec0a000057"),
  "ten": NumberInt(2018)
});

/** nhansu records **/
db.getCollection("nhansu").insert({
  "_id": ObjectId("58ff1626d893985c0f00002b"),
  "hoten": "Phan Minh Trung",
  "bidanh": "Trung",
  "ngaysinh": ISODate("1984-10-27T17:00:00.0Z"),
  "gioitinh": "M",
  "nguyenquan": "Chợ Mới, An Giang",
  "cmnd": "35151518061",
  "sodienthoai": "0985954347",
  "donvi": [
    {
      "_id": ObjectId("59170cf37247ae400e00003a"),
      "id_donvi": ObjectId("58febdd1d89398ec0a000049"),
      "id_chucvu": ObjectId("58febd1bd89398ec0a00003f"),
      "ngayquyetdinh": ISODate("2017-05-13T00:00:00.0Z"),
      "date_post": ISODate("2017-05-13T13:41:07.0Z")
    },
    {
      "_id": ObjectId("58ff1626d893985c0f00002a"),
      "id_donvi": ObjectId("58febe4ed89398ec0a000050"),
      "id_chucvu": ObjectId("58febd3bd89398ec0a000043"),
      "ngayquyetdinh": ISODate("2017-04-24T17:00:00.0Z"),
      "date_post": ISODate("2017-04-25T09:25:58.0Z")
    }
  ],
  "date_post": ISODate("2017-04-25T09:25:58.0Z")
});
db.getCollection("nhansu").insert({
  "_id": ObjectId("58ff1640d893985c0f00002d"),
  "hoten": "Nguyễn Xuân Thanh",
  "bidanh": "Thanh",
  "ngaysinh": ISODate("2017-03-26T17:00:00.0Z"),
  "gioitinh": "M",
  "nguyenquan": "Chợ Mới, An Giang",
  "cmnd": "111351518062",
  "sodienthoai": "0985954347",
  "donvi": [
    {
      "_id": ObjectId("58ff1640d893985c0f00002c"),
      "id_donvi": ObjectId("58febe4ed89398ec0a000050"),
      "id_chucvu": ObjectId("58febd3bd89398ec0a000043"),
      "ngayquyetdinh": ISODate("2017-04-24T17:00:00.0Z"),
      "date_post": ISODate("2017-04-25T09:26:24.0Z")
    }
  ],
  "date_post": ISODate("2017-04-25T09:26:24.0Z")
});

/** sangkienkinhnghiem records **/

/** sessions records **/
db.getCollection("sessions").insert({
  "_id": ObjectId("58f57d7a35b2279c3f881424"),
  "session_id": "sh9djdnc7c046n0c7bvme7m6h1",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1492495211),
  "expired_at": NumberInt(1492519450)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58f5bf49148d6018e32a1194"),
  "session_id": "udah421712a8t6inhpi7luhub3",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1492506302),
  "expired_at": NumberInt(1492536297)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58f6cfb632f5369162076dc6"),
  "session_id": "ime4e597umsjn4ip3s12bhrok2",
  "data": "",
  "timedout_at": NumberInt(1492576038),
  "expired_at": NumberInt(1492606038)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58f7158f8677c260aa9889e2"),
  "session_id": "2nfkuuklfte8b2i4ssprdj7jq5",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1492593930),
  "expired_at": NumberInt(1492623919)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58fd581eaac4cc7e7eccf656"),
  "session_id": "qpkh1s353h4agabfdg2t636ca6",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1493013085),
  "expired_at": NumberInt(1493034174)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58fd9f36480e49b078823b95"),
  "session_id": "1ucn0gstmf2t6rnfpns8fpndm1",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1493032511),
  "expired_at": NumberInt(1493052374)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58feafd34652f88312f5ca92"),
  "session_id": "b37nclqblg135e3kmdtvdhnn54",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1493096757),
  "expired_at": NumberInt(1493122163)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58fef857ffcc8a872729e960"),
  "session_id": "gdodbuanlpcdvohmgam4v5c977",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1493114717),
  "expired_at": NumberInt(1493140727)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("58ff145374752e3b9f646057"),
  "session_id": "fglfjamtti6u6uhk776nmvdff0",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1493120161),
  "expired_at": NumberInt(1493147891)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("59171266400ae1085de232ef"),
  "session_id": "66sisklp2socacjtjjjvcudre6",
  "data": "",
  "timedout_at": NumberInt(1494690262),
  "expired_at": NumberInt(1494720262)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("5917228b400ae1085de232f1"),
  "session_id": "d0afa93rf75jcqp5sco6v81cm6",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1494698220),
  "expired_at": NumberInt(1494724395)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("5917efd7400ae1085de232f4"),
  "session_id": "vs0oc7tj1b5d0f0enhq60k8205",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1494752698),
  "expired_at": NumberInt(1494776951)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("591811cf400ae1085de232f6"),
  "session_id": "ua9ugudhht1nasr73s7mi4h014",
  "data": "user_id|s:24:\"58f56ef6d89398700600002a\";roles|i:31;",
  "timedout_at": NumberInt(1494762295),
  "expired_at": NumberInt(1494785647)
});
db.getCollection("sessions").insert({
  "_id": ObjectId("591811cf400ae1085de232f5"),
  "session_id": "vdoa5vsk2bbm7h9824l9p552s7",
  "data": "",
  "timedout_at": NumberInt(1494755647),
  "expired_at": NumberInt(1494785647)
});

/** thidua records **/

/** thiduatapthe records **/
db.getCollection("thiduatapthe").insert({
  "_id": ObjectId("591824497247aedc0e000041"),
  "id_nam": ObjectId("58fec1c5d89398ec0a000057"),
  "id_danhhieu": ObjectId("58f58774d89398c80d00002c"),
  "id_donvi": ObjectId("58febe4ed89398ec0a000050"),
  "date_post": ISODate("2017-05-14T09:32:57.0Z"),
  "xetduyet_1": {
    "t": NumberInt(1),
    "id_danhhieu": ObjectId("58f58766d89398c80d00002b"),
    "noidung": "Chấp nhận",
    "date_post": ISODate("2017-05-14T09:47:05.0Z"),
    "id_user": ObjectId("591827997247aedc0e000042")
  },
  "xetduyet_2": {
    "t": NumberInt(2),
    "id_danhhieu": ObjectId("58f58774d89398c80d00002c"),
    "noidung": "Ok!",
    "date_post": ISODate("2017-05-14T09:51:34.0Z"),
    "id_user": ObjectId("591828a67247aee01d000033")
  },
  "xetduyet_3": {
    "t": NumberInt(1),
    "id_danhhieu": ObjectId("58f58766d89398c80d00002b"),
    "noidung": "oK!",
    "date_post": ISODate("2017-05-14T09:54:47.0Z"),
    "id_user": ObjectId("591829677247ae140f000039")
  }
});

/** users records **/
db.getCollection("users").insert({
  "_id": ObjectId("58f56ef6d89398700600002a"),
  "username": "admin",
  "password": "ec705f9abe736346fc04409dc85c79d8",
  "roles": NumberInt(31),
  "person": "Phan Minh Trung",
  "hinhanh": ObjectId("58f43f74d893986c07000029"),
  "logs": [
    {
      "in": ISODate("2017-04-09T05:12:14.0Z")
    },
    {
      "out": ISODate("2017-04-09T05:18:00.0Z")
    },
    {
      "in": ISODate("2017-04-09T05:19:05.0Z")
    },
    {
      "in": ISODate("2017-04-10T01:29:20.0Z")
    },
    {
      "in": ISODate("2017-04-10T06:03:30.0Z")
    },
    {
      "in": ISODate("2017-04-10T15:24:56.0Z")
    },
    {
      "in": ISODate("2017-04-11T05:40:44.0Z")
    },
    {
      "in": ISODate("2017-04-11T05:40:59.0Z")
    },
    {
      "in": ISODate("2017-04-14T02:37:13.0Z")
    },
    {
      "in": ISODate("2017-04-14T06:18:55.0Z")
    },
    {
      "in": ISODate("2017-04-15T23:47:14.0Z")
    },
    {
      "in": ISODate("2017-04-16T02:30:45.0Z")
    },
    {
      "in": ISODate("2017-04-17T04:06:51.0Z")
    },
    {
      "in": ISODate("2017-04-17T06:24:55.0Z")
    },
    {
      "in": ISODate("2017-04-18T01:42:16.0Z")
    },
    {
      "out": ISODate("2017-04-18T01:56:00.0Z")
    },
    {
      "in": ISODate("2017-04-18T01:57:31.0Z")
    },
    {
      "out": ISODate("2017-04-18T02:40:21.0Z")
    },
    {
      "in": ISODate("2017-04-18T02:44:01.0Z")
    },
    {
      "out": ISODate("2017-04-18T02:44:10.0Z")
    },
    {
      "in": ISODate("2017-04-18T02:44:48.0Z")
    },
    {
      "in": ISODate("2017-04-18T07:24:51.0Z")
    },
    {
      "out": ISODate("2017-04-18T07:24:57.0Z")
    },
    {
      "in": ISODate("2017-04-18T07:25:02.0Z")
    },
    {
      "in": ISODate("2017-04-19T02:46:50.0Z")
    },
    {
      "out": ISODate("2017-04-19T02:47:18.0Z")
    },
    {
      "in": ISODate("2017-04-19T07:45:25.0Z")
    },
    {
      "in": ISODate("2017-04-24T01:43:35.0Z")
    },
    {
      "in": ISODate("2017-04-24T06:46:17.0Z")
    },
    {
      "in": ISODate("2017-04-25T02:09:27.0Z")
    },
    {
      "in": ISODate("2017-04-25T07:42:00.0Z")
    },
    {
      "in": ISODate("2017-04-25T09:18:14.0Z")
    },
    {
      "in": ISODate("2017-05-13T12:47:36.0Z")
    },
    {
      "out": ISODate("2017-05-13T14:04:22.0Z")
    },
    {
      "in": ISODate("2017-05-13T15:13:17.0Z")
    },
    {
      "in": ISODate("2017-05-14T05:49:49.0Z")
    },
    {
      "in": ISODate("2017-05-14T08:14:09.0Z")
    }
  ]
});
