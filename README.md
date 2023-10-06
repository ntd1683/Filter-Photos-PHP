# FILTER PHOTOS

Tool giúp các bạn nhiếp ảnh gia lọc ảnh nhanh hơn
<br>Video Hướng Dẫn Cụ Thể : -[YOUTUBE](https://youtu.be/Lj4jLvsL71Y)

## Gợi Ý
- Bạn có thể dùng "tool" được viết bằng c# để có dễ dàng sử dụng và cài đặt hơn
  [C#](https://github.com/ntd1683/Filter-Photos-Windows)
## Đặc Điểm
- Được Viết Bằng Ngôn Ngữ `PHP` và xử lý bằng `Command Prompt` của Window

## Chuẩn Bị

Bạn Cần Tải Những Phần Mềm Dưới Đây:

- [EXE](https://github.com/ntd1683/Filter_Photos/raw/main/Filter_Photos.exe)
- [PHP](https://windows.php.net/downloads/releases/php-8.2.2-nts-Win32-vs16-x64.zip)

### Chuẩn Bị Cài Đặt

1. Giải nén `PHP` vừa tải

![RAR](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/rar.png)

- Lưu ý : Nhớ coppy lại đường dán , coppy : `Ctrl` + `C`

![Đường Dẫn](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/coppy%201.png)

![Đường Dẫn](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/coppy%202.png)

2. Nhấn các phím `Windows` + `R` trên bàn phím của bạn để mở hộp thoại `Run`.

![run](https://cdn.windowsreport.com/wp-content/uploads/2022/04/open-advanced-system-settings-windows-11-run.png)

3. Nhập `sysdm.cpl` vào hộp văn bản.

![run](https://cdn.windowsreport.com/wp-content/uploads/2022/04/open-advanced-system-settings-windows-11-run.png)

4. Nhấn `Enter` trên bàn phím của bạn.

5. Hộp thoại System Properties sẽ mở ra.

6. Điều hướng đến tab `Advanced` và Click `environment variables`

![System Properties](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/system%20properties.png)

7. Click `Path` và Click `Edit`

![environment variables](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/environment%20variables.png)

8. Click `New`

![Edit environment variables](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/edit%20environment%20variables.png)

9. Dán đường dẫn thư mục bạn đã giải nén ở B1 ( Dán : `Crl` + `V` )

![Path](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/path.png)

10. Nhấn `Ok` tắt hết hộp thoại là xong

### Cài Đặt
1. Mở File Exe đã tải ở phần chuẩn bị.
2. Chọn `Accept` : 

![B2](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/B1.png)

3. Dán đường dẫn thư mục cần lọc vào ô `Destination Folder` hoặc chọn `Browse` trỏ tới thư mục cần lọc

![B3](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/b2.png)

4. Nhập `NTD` vào ô password

![B4](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/B3.png)

5. Click thanh đường dẫn , gõ `cmd`

![B5](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/cmd.png)

6. Nhập ```php filter_photos.php```

![B6](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/cmd2.png)

7. Hiện Như ảnh là đã xong

![B7](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/ok%20xog.png)

Author
- NTD <br>
![gif](https://raw.githubusercontent.com/ntd1683/Filter_Photos/main/File%20n%C3%A0y%20kh%C3%B4ng%20c%C3%B3%20g%C3%AC%20c%E1%BA%A3%20%C4%91%E1%BB%ABng%20xem/zWm.gif)
