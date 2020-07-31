import 'dart:io';
import 'package:flutter/material.dart';
import 'package:image_picker/image_picker.dart';

class LandingScreen extends StatefulWidget {
  @override
  _LandingScreenState createState() => _LandingScreenState();
}

class _LandingScreenState extends State<LandingScreen> {
  File imageFile;
  final picker = ImagePicker();
  _openCamera(BuildContext context) async {
    var pickedFile = await picker.getImage(source: ImageSource.camera);
    this.setState(() {
      imageFile = File(pickedFile.path);
    });
    Navigator.of(context).pop();
  }
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("ACTIVAR CAMARA"),
        centerTitle:true, 
      ),
      body: Container(
        child: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.spaceAround,
            children: <Widget>[
              RaisedButton(
                 onPressed: () {
                  _openCamera(context);
                },
                child: Icon(Icons.camera_alt),
              )
            ],
          ),
        ),
      ),
    );
  }
}

