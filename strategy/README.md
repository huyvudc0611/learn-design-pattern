To separate strategies and to enable fast switching between them. Also this pattern is a good alternative to inheritance (instead of having an abstract class that is extended).

- Sử dụng Strategy Pattern khi nào?
  + Khi muốn có thể thay đổi các thuật toán được sử dụng bên trong một đối tượng tại thời điểm run-time.
  + Khi có một đoạn mã dễ thay đổi, và muốn tách chúng ra khỏi chương trình chính để dễ dàng bảo trì.
  + Tránh sự rắc rối, khi phải hiện thực một chức năng nào đó qua quá nhiều lớp con.
  + Cần che dấu sự phức tạp, cấu trúc bên trong của thuật toán.

VD: để thực hiện một thuật toán sắp xếp có nh tht toán như quick sort, heap sort ... như vây ta chỉ cần tạo ra 2 hàm sort riêng biệt r viết thuật t trong đó
