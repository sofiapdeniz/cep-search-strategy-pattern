from abc import ABC, abstractmethod


class CepProviderInterface(ABC):
    @abstractmethod
    def search(self, cep: str) -> dict:
        pass
