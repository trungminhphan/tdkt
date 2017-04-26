
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
db.getCollection("sangkienkinhnghiem").insert({
  "_id": ObjectId("58ff1963d893985c0f00002e"),
  "ten": "Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm \r\n\r\nSáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm \r\n\r\nSáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm Sáng kiến kinh nghiệm ",
  "nhansu": [
    {
      "id_nhansu": ObjectId("58ff1626d893985c0f00002b"),
      "id_donvi": ObjectId("58ff1626d893985c0f00002a")
    },
    {
      "id_nhansu": ObjectId("58ff1640d893985c0f00002d"),
      "id_donvi": ObjectId("58ff1640d893985c0f00002c")
    }
  ],
  "xetduyet": NumberInt(0),
  "lydokhongxet": "",
  "date_post": ISODate("2017-04-25T09:39:47.0Z"),
  "id_user_regis": ObjectId("58f56ef6d89398700600002a")
});

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

/** system.indexes records **/
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "thiduakhenthuong.sessions"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "thiduakhenthuong.users"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "thiduakhenthuong.chucvu"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "thiduakhenthuong.danhhieu"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "thiduakhenthuong.donvi"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "thiduakhenthuong.nhansu"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "thiduakhenthuong.danhhieukhenthuong"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "thiduakhenthuong.nam"
});
db.getCollection("system.indexes").insert({
  "v": NumberInt(1),
  "key": {
    "_id": NumberInt(1)
  },
  "name": "_id_",
  "ns": "thiduakhenthuong.sangkienkinhnghiem"
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
    }
  ]
});
