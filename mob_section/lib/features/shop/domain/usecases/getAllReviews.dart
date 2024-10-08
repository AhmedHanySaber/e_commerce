import 'package:mob_section/core/error/failure.dart';
import 'package:dartz/dartz.dart';
import 'package:mob_section/core/usecase/usecase.dart';
import 'package:mob_section/features/shop/domain/entities/reviews_entity.dart';
import '../repositories/product_repository.dart';

class GetReviewsUsecase
    extends BaseUsecase<GetReviewsEntity, GetReviewsUsecaseParams> {
  final ProductRepository productRepository;

  GetReviewsUsecase(this.productRepository);
  @override
  Future<Either<Failure, GetReviewsEntity>> call(
      GetReviewsUsecaseParams params) async {
    return await productRepository.getReviews(GetReviewsParams(params.productId));
  }
}

class GetReviewsUsecaseParams {
  final String productId;

  GetReviewsUsecaseParams(this.productId);
}
