<!DOCTYPE html>
<html lang="en">
    <x-client.head />
  <body>
    <!-- Spinner Start -->
   <x-client.spinner />
    <!-- Spinner End -->

    <!-- Topbar Start -->
     <x-client.topbar />
    <!-- Topbar End -->
    <x-dcore.alert />
    <!-- Navbar Start -->
    <x-client.navbar />
    <!-- Navbar End -->

    <!-- Service Start -->
   <x-client.siapa :data="$data"/>
    <!-- Service End -->

    <x-client.features />

    <!-- Footer Start -->
   <x-client.footer />
    <!-- Footer End -->

    <!-- Back to Top -->
    <x-client.backtotop />

    <x-client.script />
  </body>
</html>
