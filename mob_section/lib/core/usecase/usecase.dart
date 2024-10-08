import 'package:dartz/dartz.dart';
import 'package:mob_section/core/error/failure.dart';


abstract class BaseUsecase<T,Params>{
Future<Either<Failure,T>> call(Params params);
}
class NoParams {}