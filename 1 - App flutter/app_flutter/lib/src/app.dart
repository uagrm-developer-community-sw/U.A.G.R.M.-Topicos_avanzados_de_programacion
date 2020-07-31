import 'package:app_flutter/src/pages/camara.page.dart';
import 'package:flutter/material.dart';

//CLASE
class MyApp extends StatelessWidget {
  @override
  Widget build( context ){
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      home:Center(
        child: LandingScreen(),
      ),
    );
  }
}