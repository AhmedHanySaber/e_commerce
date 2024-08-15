import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:flutter_bloc/flutter_bloc.dart';
import 'package:mob_section/core/utils/router/routes.dart';

import '../../../features/auth/views/auth_page.dart';


Route<dynamic> onGenerate(RouteSettings settings) {
  switch (settings.name) {
    case AppRoutes.loginPageRoute:
      return CupertinoPageRoute(
        builder: (_) => const AuthPage(),
        settings: settings,
      );

    default:
      return CupertinoPageRoute(
        builder: (_) => const Scaffold(
          body: Center(
            child: Text('No route defined for '),
          ),
        ),
        settings: settings,
      );
  }
}
